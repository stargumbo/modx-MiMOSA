<?php  return array (
  'events' => 'Events',
  'system_event' => 'System Event',
  'system_events' => 'System Events',
  'system_events.desc' => 'System Events are the events in MODX that Plugins are registered to. They are "fired" throughout the MODX code, allowing Plugins to interact with MODX code and add custom functionality without hacking core code. You can create your own events for your custom project here too. You cannot remove core events, only your own.',
  'system_events.search_by_name' => 'Search by event name',
  'system_events.create' => 'Create New Event',
  'system_events.name_desc' => 'The name of the event. Which you should use in a &dollar;modx->invokeEvent(name, properties) call.',
  'system_events.groupname' => 'Group',
  'system_events.groupname_desc' => 'The name of the group where the new event belongs to. Select an existing one or type in a new group name.',
  'system_events.service' => 'Service',
  'system_events.service_1' => 'Parser Service Events',
  'system_events.service_2' => 'Manager Access Events',
  'system_events.service_3' => 'Web Access Service Events',
  'system_events.service_4' => 'Cache Service Events',
  'system_events.service_5' => 'Template Service Events',
  'system_events.service_6' => 'User Defined Events',
  'system_events.remove' => 'Remove Event',
  'system_events.remove_confirm' => 'Are you sure you want to remove the <b>[[+name]]</b> event? This is irreversible!',
  'system_events_err_ns' => 'Name of the System Event not specified.',
  'system_events_err_ae' => 'Name of the System Event already exists.',
  'system_events_err_startint' => 'It\'s not allowed to start the name with a digit.',
  'system_events_err_remove_not_allowed' => 'You\'re not allowed to remove this System Event.',
);