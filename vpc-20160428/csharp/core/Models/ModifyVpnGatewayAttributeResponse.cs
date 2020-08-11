// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class ModifyVpnGatewayAttributeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("VpnGatewayId")]
        [Validation(Required=true)]
        public string VpnGatewayId { get; set; }

        [NameInMap("VpcId")]
        [Validation(Required=true)]
        public string VpcId { get; set; }

        [NameInMap("VSwitchId")]
        [Validation(Required=true)]
        public string VSwitchId { get; set; }

        [NameInMap("InternetIp")]
        [Validation(Required=true)]
        public string InternetIp { get; set; }

        [NameInMap("IntranetIp")]
        [Validation(Required=true)]
        public string IntranetIp { get; set; }

        [NameInMap("CreateTime")]
        [Validation(Required=true)]
        public long CreateTime { get; set; }

        [NameInMap("EndTime")]
        [Validation(Required=true)]
        public long EndTime { get; set; }

        [NameInMap("Spec")]
        [Validation(Required=true)]
        public string Spec { get; set; }

        [NameInMap("Name")]
        [Validation(Required=true)]
        public string Name { get; set; }

        [NameInMap("Description")]
        [Validation(Required=true)]
        public string Description { get; set; }

        [NameInMap("Status")]
        [Validation(Required=true)]
        public string Status { get; set; }

        [NameInMap("BusinessStatus")]
        [Validation(Required=true)]
        public string BusinessStatus { get; set; }

        [NameInMap("EnableBgp")]
        [Validation(Required=true)]
        public bool? EnableBgp { get; set; }

        [NameInMap("AutoPropagate")]
        [Validation(Required=true)]
        public bool? AutoPropagate { get; set; }

    }

}
