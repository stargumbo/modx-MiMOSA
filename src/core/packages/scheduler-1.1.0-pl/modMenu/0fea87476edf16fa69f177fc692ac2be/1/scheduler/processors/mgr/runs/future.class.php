<?php
/**
 * Gets a list of sTaskRun objects.
 */
class SchedulerTaskRunFutureListProcessor extends modObjectGetListProcessor {
    public $classKey = 'sTaskRun';
    public $languageTopics = array('scheduler:default');
    public $defaultSortField = 'timing ASC, id';
    public $defaultSortDirection = 'ASC';
    public $additionalWhere = array(
        'status' => sTaskRun::STATUS_SCHEDULED,
    );

    /**
     * Filter on status and add task data
     *
     * @param xPDOQuery $c
     * @return xPDOQuery
     */
    public function prepareQueryBeforeCount(xPDOQuery $c) {

        $c->innerJoin('sTask', 'Task');
        $c->select($this->modx->getSelectColumns($this->classKey, $this->classKey));
        $c->select($this->modx->getSelectColumns('sTask', 'Task', 'task_'));
        $c->where($this->additionalWhere);

        $query = $this->getProperty('query');
        if(!empty($query)) {
            $c->andCondition(array('Task.reference:LIKE' => '%'.$query.'%'));
        }

        $namespace = $this->getProperty('namespace');
        if(!empty($namespace)) {
            $c->andCondition(array('Task.namespace' => $namespace));
        }

        return $c;
    }

    /**
     * @param xPDOObject $object
     * @return array
     */
    public function prepareRow(xPDOObject $object) {
        $array = $object->toArray('', false, true);

        // data string
        $dataStr = array();
        if (is_array($array['data'])) {
            foreach ($array['data'] as $key => $value) {
                $dataStr[] = $key . ': ' . (is_array($value) ? $this->showArray($value) : $value);
            }
        }
        $dataStr = implode(', ', $dataStr);
        $array['data_view'] = $dataStr;
        $array['data'] = $this->modx->toJSON($array['data']);

        return $array;
    }

    /**
     * @param $array
     * @return string
     */
    public function showArray($array)
    {
        $return = array();
        foreach ($array as $key => $value) {
            $return[] = $key . ': ' . (is_array($value) ? $this->showArray($value) : $value);
        }
        $return = implode(', ', $return);
        return '{ ' . $return . ' }';
    }
}

return 'SchedulerTaskRunFutureListProcessor';
