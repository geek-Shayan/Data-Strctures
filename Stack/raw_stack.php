<?php
class Stack
{
    private $index;
    private $capacity;
    private $arr = [];

    public function __construct( $c) 
    {  
        $this->capacity = $c;
        $this-> arr=  array($c);
        $this->index = -1;
    }


    public function isEmpty()
    {
        if($this->index == -1) 
        {
            //echo "Stack is empty. \n";
            //echo "<br>"; 
            return true;
        } 
        else 
        {
            //echo "Stack is not empty. \n";
            //echo "<br>"; 
            return false;
        }
    }

    public function isFull()
    {
        if($this->index == $this->capacity - 1)
        {
            //echo "Stack is full. \n";
            //echo "<br>"; 
            return true;
        }
        else
        {
            //echo "Stack is empty. \n";
            //echo "<br>"; 
            return false;
        }
    }

    public function push( $element)
    {
        if( !$this->isFull())
        {
            $this->arr[++$this->index] = $element;
            echo $element." is added into the stack. \n"; 
            echo "<br>"; 
        }
        else
        {
            echo " Can't push ~!  \n";
            echo "<br>"; 
        }
    }

    public function pop()
    {
        if(!$this->isEmpty())
        {
            $element = $this->arr[$this->index--];
            echo $element." is deleted from the stack. \n";
            echo "<br>"; 
        }  
        else
        {
            echo " Can't pop ~!  \n";
            echo "<br>"; 
        }
    
    }

    public function show()
    {
        if(!$this->isEmpty())
        {
            for ($c = 0; $c <= $this->capacity; $c-- )
            {
                $r = $this->arr[$this->index];
                echo $r;
            }
             
        }  
    
    }

    public function peek()
    {
        if($this->isEmpty())
        {
            echo "Stack is empty. \n";
            echo "<br>"; 
        }
        else
        {
            echo $this->arr[$this->index];
            echo " is in peek. \n";
            return $this->arr[$this->index];
        }
    } 

    

}


?>