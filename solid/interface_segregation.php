<?php 

/* 

A client should never be forced to implement an interface that it doesn’t use, 
or clients shouldn’t be forced to depend on methods they do not use.

Still building from the previous ShapeInterface example, 
we will need to support the new three-dimensional shapes of Cuboid and Spheroid, 
and these shapes will need to also calculate volume.



*/
interface ShapeInterface
{
    public function area();
}

interface ThreeDimensionalShapeInterface
{
    public function volume();
}

interface ManageShapeInterface
{
    public function calculate();
}


class Square implements ShapeInterface, ManageShapeInterface
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

    public function calculate()
    {
        return $this->area();
    }
}

class Cuboid implements ShapeInterface, ThreeDimensionalShapeInterface
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

    public function volume()
    {
        return $this->area() * $this->length;
    }

    public function calculate()
    {
        return $this->area();
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
            if (is_a($shape, 'ManageShapeInterface')) {
                $area[] = $shape->calculate();
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
    new Square(5),
    new Square(6),
  ];


  $areas = new AreaCalculator($shapes);
  
  $output = new SumCalculatorOutputter($areas);

  echo $output->JSON();
  echo $output->HTML();
//   $output2 = new SumCalculatorOutputter($volumes);