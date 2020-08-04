// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class ModifyInstanceSpecRequest : TeaModel {
        [NameInMap("InstanceId")]
        [Validation(Required=true)]
        public string InstanceId { get; set; }

        [NameInMap("InstanceType")]
        [Validation(Required=false)]
        public string InstanceType { get; set; }

        [NameInMap("InternetMaxBandwidthOut")]
        [Validation(Required=false)]
        public int? InternetMaxBandwidthOut { get; set; }

        [NameInMap("InternetMaxBandwidthIn")]
        [Validation(Required=false)]
        public int? InternetMaxBandwidthIn { get; set; }

        [NameInMap("Temporary")]
        [Validation(Required=true)]
        public ModifyInstanceSpecRequestTemporary Temporary { get; set; }
        public class ModifyInstanceSpecRequestTemporary : TeaModel {
            [NameInMap("StartTime")]
            [Validation(Required=false)]
            public string StartTime { get; set; }
            [NameInMap("EndTime")]
            [Validation(Required=false)]
            public string EndTime { get; set; }
            [NameInMap("InternetMaxBandwidthOut")]
            [Validation(Required=false)]
            public int? InternetMaxBandwidthOut { get; set; }
        };

        [NameInMap("Async")]
        [Validation(Required=false)]
        public bool? Async { get; set; }

        [NameInMap("AllowMigrateAcrossZone")]
        [Validation(Required=false)]
        public bool? AllowMigrateAcrossZone { get; set; }

        [NameInMap("SystemDisk")]
        [Validation(Required=true)]
        public ModifyInstanceSpecRequestSystemDisk SystemDisk { get; set; }
        public class ModifyInstanceSpecRequestSystemDisk : TeaModel {
            [NameInMap("Category")]
            [Validation(Required=false)]
            public string Category { get; set; }
        };

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

    }

}
