<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'The MIT License (MIT)

Copyright (c) 2014 modmore | More for MODX

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.',
    'readme' => 'Gitify Watch
============

No, it\'s not a smart watch.. but it is a really cool plugin for MODX Revolution!

Gitify Watch is a MODX plugin to complement the Gitify command line tool. It hooks into various MODX events,
and will automatically extract and commit changes you make.

The primary purpose of Gitify Watch is to be sure changes made directly on production are immediately pushed to the git
remote, so it is easy to keep a development server up to date. With project-specific development, it could also be a
starting point for building a complete workflow away from the command line.

',
    'changelog' => '++ Gitify Watch 1.0.0-rc3
++ Released on 2015-10-07
+++++++++++++++++++++++++
- Fix undefined function error

++ Gitify Watch 1.0.0-rc2
++ Released on 2015-10-05
+++++++++++++++++++++++++
- Improved error handling related to fetching the environment information
- Make sure the push always targets the current branch

++ Gitify Watch 1.0.0-rc1
++ Released on 2015-09-30
+++++++++++++++++++++++++
- First testable release
',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '5b0ffb0e0eb597b8076b9276dec3f366',
      'native_key' => 'gitifywatch',
      'filename' => 'modNamespace/91e86d50cd9bab2b81e6010b84289b90.vehicle',
      'namespace' => 'gitifywatch',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '92ae19d192f96727da8ede02eca25cf2',
      'native_key' => 'gitifywatch.repository_path',
      'filename' => 'modSystemSetting/94130c6f29b8babc9aff283313a4c6fc.vehicle',
      'namespace' => 'gitifywatch',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '62c8e1cf9bb9771db322704c85142dd9',
      'native_key' => 'gitifywatch.gitify_path',
      'filename' => 'modSystemSetting/8de287df57a2a7b3b4d4816cb4492a62.vehicle',
      'namespace' => 'gitifywatch',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'c254597b7b70ed48d13aeb2688670f2b',
      'native_key' => NULL,
      'filename' => 'modCategory/6a980745940c12a571d287c35e331e24.vehicle',
      'namespace' => 'gitifywatch',
    ),
  ),
);