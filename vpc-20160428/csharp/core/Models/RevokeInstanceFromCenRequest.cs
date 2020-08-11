// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class RevokeInstanceFromCenRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("InstanceId")]
        [Validation(Required=true)]
        public string InstanceId { get; set; }

        [NameInMap("InstanceType")]
        [Validation(Required=true)]
        public string InstanceType { get; set; }

        [NameInMap("CenId")]
        [Validation(Required=true)]
        public string CenId { get; set; }

        [NameInMap("CenOwnerId")]
        [Validation(Required=true)]
        public long CenOwnerId { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

    }

}
