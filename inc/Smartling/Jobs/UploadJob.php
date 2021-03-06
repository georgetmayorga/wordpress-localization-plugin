<?php

namespace Smartling\Jobs;

use Smartling\Base\ExportedAPI;
use Smartling\Helpers\ArrayHelper;
use Smartling\Submissions\SubmissionEntity;

/**
 * Class UploadJob
 * @package Smartling\Jobs
 */
class UploadJob extends JobAbstract
{

    const JOB_HOOK_NAME = 'smartling-upload-task';

    /**
     * @return string
     */
    public function getJobHookName()
    {
        return self::JOB_HOOK_NAME;
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $this->getLogger()->info('Started UploadJob.');

        do {
            $entities = $this->getSubmissionManager()->find(['status' => [SubmissionEntity::SUBMISSION_STATUS_NEW]], 1);

            if (0 === count($entities)) {
                break;
            }

            $entity = ArrayHelper::first($entities);

            $this->getLogger()->info(
                vsprintf(
                    'Cron Job triggers content upload for submission id = \'%s\' with status = \'%s\' for entity = \'%s\', blog = \'%s\', id = \'%s\', targetBlog = \'%s\', locale = \'%s\'.',
                    [
                        $entity->getId(),
                        $entity->getStatus(),
                        $entity->getContentType(),
                        $entity->getSourceBlogId(),
                        $entity->getSourceId(),
                        $entity->getTargetBlogId(),
                        $entity->getTargetLocale(),
                    ]
                )
            );

            do_action(ExportedAPI::ACTION_SMARTLING_SEND_FILE_FOR_TRANSLATION, $entity);

        } while (0 < count($entities));

        $this->getLogger()->info('Finished UploadJob.');
    }


}
