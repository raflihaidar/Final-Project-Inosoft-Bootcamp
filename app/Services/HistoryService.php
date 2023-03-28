<?php

namespace App\Http\Services;

use App\Repositories\HistoryRepository;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class HistoryService
{
    protected $historyRepository;

    public function __construct()
    {
        $this->historyRepository = new HistoryRepository();
    }

    public function getAll()
    {
        $history = $this->historyRepository->getAll();
        return $history;
    }

    public function getById(string $id)
    {
        $history = $this->historyRepository->getById($id);
        return $history;
    }
}
