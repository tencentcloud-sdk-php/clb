<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * ModifyTargetGroupAttribute请求参数结构体
 *
 * @method string getTargetGroupId() 获取目标组的ID。
 * @method void setTargetGroupId(string $TargetGroupId) 设置目标组的ID。
 * @method string getTargetGroupName() 获取目标组的新名称。
 * @method void setTargetGroupName(string $TargetGroupName) 设置目标组的新名称。
 * @method integer getPort() 获取目标组的新默认端口。全监听目标组不支持此参数。
 * @method void setPort(integer $Port) 设置目标组的新默认端口。全监听目标组不支持此参数。
 * @method integer getWeight() 获取后端服务默认权重。
<ul>
    <li>取值范围[0, 100]</li>
    <li>设置该值后，添加后端服务到目标组时， 若后端服务不单独设置权重， 则使用这里的默认权重。 </li> 
</ul>
 * @method void setWeight(integer $Weight) 设置后端服务默认权重。
<ul>
    <li>取值范围[0, 100]</li>
    <li>设置该值后，添加后端服务到目标组时， 若后端服务不单独设置权重， 则使用这里的默认权重。 </li> 
</ul>
 */
class ModifyTargetGroupAttributeRequest extends AbstractModel
{
    /**
     * @var string 目标组的ID。
     */
    public $TargetGroupId;

    /**
     * @var string 目标组的新名称。
     */
    public $TargetGroupName;

    /**
     * @var integer 目标组的新默认端口。全监听目标组不支持此参数。
     */
    public $Port;

    /**
     * @var integer 后端服务默认权重。
<ul>
    <li>取值范围[0, 100]</li>
    <li>设置该值后，添加后端服务到目标组时， 若后端服务不单独设置权重， 则使用这里的默认权重。 </li> 
</ul>
     */
    public $Weight;

    /**
     * @param string $TargetGroupId 目标组的ID。
     * @param string $TargetGroupName 目标组的新名称。
     * @param integer $Port 目标组的新默认端口。全监听目标组不支持此参数。
     * @param integer $Weight 后端服务默认权重。
<ul>
    <li>取值范围[0, 100]</li>
    <li>设置该值后，添加后端服务到目标组时， 若后端服务不单独设置权重， 则使用这里的默认权重。 </li> 
</ul>
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

        if (array_key_exists("TargetGroupName",$param) and $param["TargetGroupName"] !== null) {
            $this->TargetGroupName = $param["TargetGroupName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
