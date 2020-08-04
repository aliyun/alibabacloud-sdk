// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class CreateStorageSetRequest : TeaModel {
        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ZoneId")]
        [Validation(Required=true)]
        public string ZoneId { get; set; }

        [NameInMap("StorageSetName")]
        [Validation(Required=false)]
        public string StorageSetName { get; set; }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

        [NameInMap("MaxPartitionNumber")]
        [Validation(Required=false)]
        public int? MaxPartitionNumber { get; set; }

    }

}
