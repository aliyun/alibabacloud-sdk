// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class CreateVpcResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("VpcId")]
        [Validation(Required=true)]
        public string VpcId { get; set; }

        [NameInMap("VRouterId")]
        [Validation(Required=true)]
        public string VRouterId { get; set; }

        [NameInMap("RouteTableId")]
        [Validation(Required=true)]
        public string RouteTableId { get; set; }

        [NameInMap("ResourceGroupId")]
        [Validation(Required=true)]
        public string ResourceGroupId { get; set; }

    }

}
