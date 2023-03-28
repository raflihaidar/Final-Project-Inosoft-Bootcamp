<?php

namespace App\Http\Repositories;

use App\Helpers\MongoModel;

class HistoryRepository
{
    private MongoModel $historyModel;

    public function __construct()
    {
        $this->historyModel = new MongoModel('history');
    }

    public function getId(string $id)
    {
        $result = $this->historyModel->get(['instruction_id' => $id]);
        return $result;
    }

    public function create(array $data)
    {
        $history = [
            '_id' => (string) new \MongoDB\BSON\ObjectId(),
            'activity' => $data['activity'],
            'by_user' => $data['user'],
            'timestamp' => $data['timestamp'],
        ];

        $insertData = [
            'instruction_id' => $data['instruction_id'],
            'history_data' => [$history],
        ];

        $this->historyModel->save($insertData);
    }

    public function save(array $data)
    {
        $this->historyModel->save($data);
    }
}
