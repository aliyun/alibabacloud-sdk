// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class CheckServiceLinkedRoleForDeletingRequest : TeaModel {
        [NameInMap("RoleArn")]
        [Validation(Required=true)]
        public string RoleArn { get; set; }

        [NameInMap("ServiceName")]
        [Validation(Required=true)]
        public string ServiceName { get; set; }

        [NameInMap("SPIRegionId")]
        [Validation(Required=true)]
        public string SPIRegionId { get; set; }

        [NameInMap("DeletionTaskId")]
        [Validation(Required=true)]
        public string DeletionTaskId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=false)]
        public string RegionId { get; set; }

    }

}
