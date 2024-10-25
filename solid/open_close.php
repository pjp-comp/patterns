<?php 
/* 

Objects or entities should be open for extension but closed for modification.

This means that a class should be extendable without modifying the class itself.


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


class AreaCalculator
{
    protected $shapes;

    public function __construct($shapes = [])
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {

        /* 

            - Consider a scenario where the user would like the sum of additional shapes 
            like triangles, pentagons, hexagons, etc. 
            
            - You would have to constantly edit this file and add more if/else blocks. That would violate the open-closed principle.
        */

        
        /* foreach ($this->shapes as $shape) {
            
            if (is_a($shape, 'Square')) {
                $area[] = pow($shape->length, 2);
            } elseif (is_a($shape, 'Circle')) {
                $area[] = pi() * pow($shape->radius, 2);
            }else{
                die('invalid');
            }
        } */

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



class SumCalculatorOutputter
{
    protected $calculator;

    public function __construct(AreaCalculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function JSON()
    {
        $data = [
          'sum' => $this->calculator->sum(),
      ];

        return json_encode($data);
    }

    public function HTML()
    {
        return implode('', [
          '',
              'Sum of the areas of provided shapes: ',
              $this->calculator->sum(),
          '',
      ]);
    }
}


$shapes = [
    new Circle(2),
    new Square(5),
    new Square(6),
  ];
  
  $areas = new AreaCalculator($shapes);
  $output = new SumCalculatorOutputter($areas);
  
  echo $output->JSON();
  echo $output->HTML();