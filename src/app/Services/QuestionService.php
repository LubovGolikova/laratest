<?php

namespace App\Services;

use App\Models\Question;
use App\Repositories\QuestionRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class QuestionService
{
    /**
     * @var $questionRepository
     */
    protected $questionRepository;

    /**
     * QuestionService constructor.
     *
     * @param QuestionRepository $questionRepository
     */
    public function __construct(QuestionRepository $questionRepository)
    {
        $this->questionRepository = $questionRepository;
    }

//    /**
//     * Delete question by id.
//     *
//     * @param $id
//     * @return String
//     */
//    public function deleteById($id)
//    {
//        DB::beginTransaction();
//
//        try {
//            $post = $this->questionRepository->delete($id);
//
//        } catch (Exception $e) {
//            DB::rollBack();
//            Log::info($e->getMessage());
//
//            throw new InvalidArgumentException('Unable to delete question data');
//        }
//
//        DB::commit();
//
//        return $question;
//
//    }

    /**
     * Get all question.
     *
     * @return String
     */
    public function getAll()
    {

        return $this->questionRepository->getAll();

    }

//    /**
//     * Get question by id.
//     *
//     * @param $id
//     * @return String
//     */
//    public function getById($id)
//    {
//        return $this->questionRepository->getById($id);
//    }
//
//    /**
//     * Update question data
//     * Store to DB if there are no errors.
//     *
//     * @param array $data
//     * @return String
//     */
//    public function updateQuestion($data, $id)
//    {
//        $validator = Validator::make($data, [
//            'title' => 'bail|min:2',
//            'body' => 'bail|max:255'
//        ]);
//
//        if ($validator->fails()) {
//            throw new InvalidArgumentException($validator->errors()->first());
//        }
//
//        DB::beginTransaction();
//
//        try {
//            $post = $this->questionRepository->update($data, $id);
//
//        } catch (Exception $e) {
//            DB::rollBack();
//            Log::info($e->getMessage());
//
//            throw new InvalidArgumentException('Unable to update question data');
//        }
//
//        DB::commit();
//
//        return $question;
//
//    }
//
//    /**
//     * Validate question data.
//     * Store to DB if there are no errors.
//     *
//     * @param array $data
//     * @return String
//     */
//    public function saveQuestionData($data)
//    {
//        $validator = Validator::make($data, [
//            'title' => 'required',
//            'body' => 'required'
//        ]);
//
//        if ($validator->fails()) {
//            throw new InvalidArgumentException($validator->errors()->first());
//        }
//
//        $result = $this->questionRepository->save($data);
//
//        return $result;
//    }

}
