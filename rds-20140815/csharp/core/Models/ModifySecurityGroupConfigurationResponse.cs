// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class ModifySecurityGroupConfigurationResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBInstanceName")]
        [Validation(Required=true)]
        public string DBInstanceName { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public ModifySecurityGroupConfigurationResponseItems Items { get; set; }
        public class ModifySecurityGroupConfigurationResponseItems : TeaModel {
            [NameInMap("EcsSecurityGroupRelation")]
            [Validation(Required=true)]
            public List<ModifySecurityGroupConfigurationResponseItemsEcsSecurityGroupRelation> EcsSecurityGroupRelation { get; set; }
            public class ModifySecurityGroupConfigurationResponseItemsEcsSecurityGroupRelation : TeaModel {
                    public string RegionId { get; set; }
                    public string SecurityGroupId { get; set; }
                    public string NetworkType { get; set; }
            }
        };

    }

}
