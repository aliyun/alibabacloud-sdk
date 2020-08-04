// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class ModifyInstanceMaintenanceAttributesRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("InstanceId")]
        [Validation(Required=false)]
        public List<string> InstanceId { get; set; }

        [NameInMap("MaintenanceWindow")]
        [Validation(Required=false)]
        public List<ModifyInstanceMaintenanceAttributesRequestMaintenanceWindow> MaintenanceWindow { get; set; }
        public class ModifyInstanceMaintenanceAttributesRequestMaintenanceWindow : TeaModel {
            [NameInMap("StartTime")]
            [Validation(Required=true)]
            public string StartTime { get; set; }

            [NameInMap("EndTime")]
            [Validation(Required=true)]
            public string EndTime { get; set; }

        }

        [NameInMap("ActionOnMaintenance")]
        [Validation(Required=false)]
        public string ActionOnMaintenance { get; set; }

    }

}
