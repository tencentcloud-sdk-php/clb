<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTargetGroupInstancesWeight请求参数结构体
 *
 * @method string getTargetGroupId() 获取目标组ID。
 * @method void setTargetGroupId(string $TargetGroupId) 设置目标组ID。
 * @method array getTargetGroupInstances() 获取待修改权重的服务器数组，在这个接口 Port 为必填项。
 * @method void setTargetGroupInstances(array $TargetGroupInstances) 设置待修改权重的服务器数组，在这个接口 Port 为必填项。
 */
class ModifyTargetGroupInstancesWeightRequest extends AbstractModel
{
    /**
     * @var string 目标组ID。
     */
    public $TargetGroupId;

    /**
     * @var array 待修改权重的服务器数组，在这个接口 Port 为必填项。
     */
    public $TargetGroupInstances;

    /**
     * @param string $TargetGroupId 目标组ID。
     * @param array $TargetGroupInstances 待修改权重的服务器数组，在这个接口 Port 为必填项。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("TargetGroupInstances",$param) and $param["TargetGroupInstances"] !== null) {
            $this->TargetGroupInstances = [];
            foreach ($param["TargetGroupInstances"] as $key => $value){
                $obj = new TargetGroupInstance();
                $obj->deserialize($value);
                array_push($this->TargetGroupInstances, $obj);
            }
        }
    }
}
