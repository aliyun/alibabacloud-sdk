// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class ModifyPrepayInstanceSpecRequest : TeaModel {
        [NameInMap("InstanceId")]
        [Validation(Required=true)]
        public string InstanceId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("InstanceType")]
        [Validation(Required=true)]
        public string InstanceType { get; set; }

        [NameInMap("OperatorType")]
        [Validation(Required=false)]
        public string OperatorType { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

        [NameInMap("AutoPay")]
        [Validation(Required=false)]
        public bool? AutoPay { get; set; }

        [NameInMap("MigrateAcrossZone")]
        [Validation(Required=false)]
        public bool? MigrateAcrossZone { get; set; }

        [NameInMap("SystemDisk")]
        [Validation(Required=true)]
        public ModifyPrepayInstanceSpecRequestSystemDisk SystemDisk { get; set; }
        public class ModifyPrepayInstanceSpecRequestSystemDisk : TeaModel {
            [NameInMap("Category")]
            [Validation(Required=false)]
            public string Category { get; set; }
        };

        [NameInMap("RebootTime")]
        [Validation(Required=false)]
        public string RebootTime { get; set; }

        [NameInMap("EndTime")]
        [Validation(Required=false)]
        public string EndTime { get; set; }

        [NameInMap("RebootWhenFinished")]
        [Validation(Required=false)]
        public bool? RebootWhenFinished { get; set; }

    }

}
