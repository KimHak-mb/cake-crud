<?php
declare(strict_types=1);

namespace App\Controller\Component;
use Cake\ORM\TableRegistry;
use Cake\Http\ServerRequest;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

/**
 * UserLogs component
 */
class UserLogsComponent extends Component
{
    /**
     * Default configuration.
     *
     * @var array<string, mixed>
     */
    protected $_defaultConfig = [];

    public function saveIP($user_id)
    {
        $request = new ServerRequest();
        $userLogTable = TableRegistry::getTableLocator()->get('Userlogs');
        $userlog = $userLogTable->newEmptyEntity();
        $userlog->user_id = $user_id;
        $userlog->ip = $request->clientIp();
        $userLogTable->save($userlog);
    }
}
