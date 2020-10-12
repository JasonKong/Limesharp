1 download the source / files to your local

2 run the TestLimesharpTask to see an overall result
  php TestLimesharpTask.php
  
3 use the commands below to run separately
  3.1 Task1
      php -r "require 'LimesharpTask.php'; print_r( LimesharpTask::repeat([1,0,1,1]));"
  
  3.2 Task2
      php -r "require 'LimesharpTask.php'; echo LimesharpTask::reformat('liMeSHArp DeveLoper TEST');echo PHP_EOL;"

  3.3 Task3
     option1:  
       php -r "require 'LimesharpTask.php'; print_r(LimesharpTask::next_binary_number1([1,1,0,1]));"
     option2:
       php -r "require 'LimesharpTask.php'; echo LimesharpTask::next_binary_number2('1111');echo PHP_EOL;"
