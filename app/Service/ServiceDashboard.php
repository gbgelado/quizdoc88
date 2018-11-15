<?php
/**
 * Created by PhpStorm.
 * User: toboymoney
 * Date: 11/11/2018
 * Time: 13:32
 */

namespace DockQuiz\Service;


use DockQuiz\Test;
use DockQuiz\TestAnswer;
use DockQuiz\Topic;

class ServiceDashboard
{
    private $topic;
    private $test;
    private $testAnswer;

    public function __construct(Topic $topic, Test $test, TestAnswer $testAnswer)
    {
        $this->topic = $topic;
        $this->test = $test;
        $this->testAnswer;
    }

    public static function getTotalAcertos($id)
    {
        $topic = new TestAnswer();
        $result_topic = $topic->where('topic_id',$id)->where('correct',1)->get();

        return $result_topic->count();
    }
    public static function totalPorcento($total_acertos,$total_questions)
    {
        $result = $total_acertos * 100;

        if(!$result) return 0;

        $result_calc = $result / $total_questions;

        return $result_calc;
    }
}