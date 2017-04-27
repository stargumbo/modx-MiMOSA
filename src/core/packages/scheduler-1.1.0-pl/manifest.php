<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'The MIT License (MIT)

Copyright (c) 2014 Bert Oost for modmore

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
    'readme' => '--------------------------------------------
Scheduler - Handles scheduling tasks in the future
--------------------------------------------
Author: Mark Hamstra - support@modmore.com
        Bert Oost - support@modmore.com
--------------------------------------------

Scheduler is a package for MODX Revolution that handles scheduling tasks in
the future. It is meant to provide an easy to integrate and administer
scheduling engine for developers. At modmore it is used in our billing and
registration systems and probably much, much more in the future.',
    'changelog' => '++ Scheduler 1.1.0-pl
++ Released on 2015-05-29
+++++++++++++++++++++++++
- sTask->schedule now returns the sTaskRun object on success
- Add option to schedule a task from the task context menu (#11)
- Fix several issues when sTaskRun.data isn\'t an array (#15, #18)
- Use configured manager_date_format and manager_time_format for the date/time displayed in the component (#16)
- Fix adding non-snippet tasks due to validation (#13)
- Fix fields being duplicated in the Tasks window
- Improve display of (nested) data arrays in grid

++ Scheduler 1.0.2-pl
++ Released on 2014-05-29
+++++++++++++++++++++++++
Fix typos in English lexicon, added Dutch and German (Thx Christian Seel!)

++ Scheduler 1.0.1-pl
++ Released on 2014-05-07
+++++++++++++++++++++++++
- Fixed: load right package meta data at installation


++ Scheduler 1.0.0-pl
++ Released on 2014-05-07
+++++++++++++++++++++++++
- Initial release
',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '4b462379c870b6ee6505f65d570ced69',
      'native_key' => 'scheduler',
      'filename' => 'modNamespace/063b5efdb80876940ce9edcec2fabf2f.vehicle',
      'namespace' => 'scheduler',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => 'ca91c6541041f669b715f698fb071844',
      'native_key' => 'scheduler',
      'filename' => 'modMenu/0fea87476edf16fa69f177fc692ac2be.vehicle',
      'namespace' => 'scheduler',
    ),
  ),
);