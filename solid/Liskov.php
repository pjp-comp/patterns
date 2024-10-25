<?php 
/* 

every subclass or derived class should be substitutable for their base or parent class.

*/


/* 

However, another problem arises. 
How do you know that the object passed into the AreaCalculator is actually a shape or if the shape has a method named area?

*/

interface ShapeInterface{
    public function area();
}


class Square implements ShapeInterface
{
    public $length;

    public function __construct($length)
    {
        $this->length = $length;
    }

    public function area()
    {
        return pow($this->length, 2);
    }
}

class Circle implements ShapeInterface
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area(){
        return pi() * pow($this->radius, 2);
    }
}


// Building off the example AreaCalculator class, consider a new VolumeCalculator class that extends the AreaCalculator class:

class AreaCalculator
{
    protected $shapes;

    public function __construct($shapes = [])
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {

        foreach ($this->shapes as $shape) {
            if (is_a($shape, 'ShapeInterface')) {
                $area[] = $shape->area();
                continue;
            }

            throw new Exception();
        }

        return array_sum($area);
    }
}

class VolumeCalculator extends AreaCalculator
{
    public function construct($shapes = [])
    {
        parent::__construct($shapes);
        // $this->shape = $shapes;
    }

    public function sum()
    {
        // logic to calculate the volumes and then return an array of output
        $summedData = parent::sum();
        return $summedData;
    }
}



class SumCalculatorOutputter {
    protected $calculator;

    public function __construct(AreaCalculator $calculator) {
        $this->calculator = $calculator;
    }

    public function JSON() {
        $data = array(
            'sum' => $this->calculator->sum()
        );

        return json_encode($data);
    }

    public function HTML() {
        return implode('', array(
            '',
                'Sum of the areas of provided shapes: ',
                $this->calculator->sum(),
            ''
        ));
    }
}


$shapes = [
    new Circle(2),
    new Square(5),
    new Square(6),
  ];

  $solidShapes = [
    new Circle(2),
    new Square(5),
    new Square(6),
  ];

  $areas = new AreaCalculator($shapes);
  $volumes = new VolumeCalculator($solidShapes);
  
  $output = new SumCalculatorOutputter($areas);
  $output2 = new SumCalculatorOutputter($volumes);

  echo $output2->JSON();
  echo $output2->HTML();
//   $output2 = new SumCalculatorOutputter($volumes);