<?php

class Task extends BaseTask
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function rules()
    {
        return CMap::mergeArray(parent::rules(), [
            ['title', 'required'],
            ['due_date', 'date', 'format'=>'yyyy-mm-dd', 'message'=>'Неправильный формат даты, пример: 2013-12-25'],
            ['due_date', 'default', 'setOnEmpty'=>true, 'value'=>null],
        ]);
    }

    public function hasDueDate()
    {
        if (!$this->due_date or $this->due_date == '0000-00-00') {
            return false;
        } else {
            return true;
        }
    }

    public function getDueDateText()
    {
        if (!$this->hasDueDate()) {
            return '';
        } else {
            return Yii::app()->dateFormatter->formatDateTime($this->due_date, 'long', null);
        }
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Задача',
            'description' => 'Описание',
            'due_date' => 'Выполнить до',
        ];
    }
}
