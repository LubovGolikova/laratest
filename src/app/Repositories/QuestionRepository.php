<?php

namespace App\Repositories;

use App\Models\Question;

class QuestionRepository
{
    /**
     * @var Question
     */
    protected $question;

    /**
     * QuestionRepository constructor.
     *
     * @param Question $question
     */
    public function __construct(Question $question)
    {
        $this->question = $question;
    }

    /**
     * Get all questions.
     *
     * @return Question|Question[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        dump($this->question->all());
        return $this->question->all();
//        return $this->question
//            ->get();
    }

//    /**
//     * Get question by id
//     *
//     * @param $id
//     * @return mixed
//     */
//    public function getById($id)
//    {
//        return $this->question
//            ->where('id', $id)
//            ->get();
//    }

    /**
     * Save Question
     *
     * @param $data
     * @return Question
     */
    public function save($data)
    {
        $question = new $this->question;

        $question->title = $data['title'];
        $question->body = $data['body'];
        $question->user_id = $data['user_id'];
        $question->save();
        return $question->fresh();
    }
//
//    /**
//     * Update Question
//     *
//     * @param $data
//     * @return Question
//     */
//    public function update($data, $id)
//    {
//
//        $question = $this->question->find($id);
//
//        $question->title = $data['title'];
//        $question->body = $data['body'];
//
//        $question->update();
//
//        return $question;
//    }
//
//    /**
//     * Update Question
//     *
//     * @param $data
//     * @return Question
//     */
//    public function delete($id)
//    {
//
//        $question = $this->question->find($id);
//        $question->delete();
//
//        return $question;
//    }

}
