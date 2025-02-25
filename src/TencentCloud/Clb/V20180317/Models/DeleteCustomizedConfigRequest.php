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
 * DeleteCustomizedConfig请求参数结构体
 *
 * @method array getUconfigIdList() 获取删除的配置ID列表
 * @method void setUconfigIdList(array $UconfigIdList) 设置删除的配置ID列表
 */
class DeleteCustomizedConfigRequest extends AbstractModel
{
    /**
     * @var array 删除的配置ID列表
     */
    public $UconfigIdList;

    /**
     * @param array $UconfigIdList 删除的配置ID列表
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
        if (array_key_exists("UconfigIdList",$param) and $param["UconfigIdList"] !== null) {
            $this->UconfigIdList = $param["UconfigIdList"];
        }
    }
}
