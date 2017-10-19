<?php


class InsertionSort
{
    public $data ;
    public $sorted = [];

    public function __construct($data)
    {

        if(is_array($data)){
            $this->convertToQueue($data);
        }
        elseif ($data instanceof SplQueue){
            $this->data = $data;
        }
        else{
            throw new Exception('Please enter Array or queue of numbers');
        }

    }

    public function sort(){
        $this->sorted[] = $this->data->dequeue();
        while(! $this->data->isEmpty()  ){
            $index = count($this->sorted) - 1;
            $wanted = count($this->sorted);
            $item =$this->data->dequeue();
            while($item < $this->sorted[$index] ){
                $this->sorted[$wanted] = $this->sorted[$index];
                $index--;
                $wanted--;
            }
            $this->sorted[$wanted] = $item;
        }
        return $this->sorted;
    }

    public function getGreatestNumber(){
            $this->sort();
            return $this->sorted[count($this->sorted)-1];
    }

    public function getSmallestNumber(){
        $this->sort();
        return $this->sorted[0];
    }

    protected  function convertToQueue(Array $data){
        $this->data = new SplQueue();

        foreach($data as $item){
            $this->data->enqueue($item);
        }

    }

}
