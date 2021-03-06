<?php

/**
 * Tencent is pleased to support the open source community by making 蓝鲸 available.
 * Copyright (C) 2016 THL A29 Limited, a Tencent company. All rights reserved.
 * Licensed under the MIT License (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at
 * http://opensource.org/licenses/MIT
 * Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.
 */

class  HostPropertyClassifyModel extends Cc_Model {

    public function __construct() {
        parent::__construct();
    }

    /**
     * @获取平台相应的主机属性
     */
    public function getAllHostProperty() {
        $this->load->database();
        $this->db->select('*');
        $this->db->order_by('Order', 'asc');
        $this->db->from('cc_HostPropertyClassify');
        $query = $this->db->get();
        return $query->num_rows() ? $query->result_array() : array();
    }

    /**
     * @新增主机属性
     * @param data(PropertyKey, PropertyName, Group, CreateTime, LastTime)
     */
    public function addHostProperty($data) {
        $this->load->database();
        return $this->db->insert('cc_HostPropertyClassify',$data);
    }

    /**
     * @更新主机属性
     * @param data(PropertyKey, PropertyName, Group, LastTime)
     * @param $ID 主键
     */
    public function updateHostProperty($data, $ID) {
        $this->load->database();
        $this->db->where('ID',$ID);
        $this->db->update('cc_HostPropertyClassify', $data);
    }

    /**
     * @删除主机属性
     * @param $ID 主键
     */
    public function deleteHostProperty($ID) {
        $this->load->database();
        $this->db->where('ID',$ID);
        $this->db->delete('cc_HostPropertyClassify');
    }
}