// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.CS20151215.Models
{
    public class ModifyClusterBody : TeaModel {
        [NameInMap("deletion_protection")]
        [Validation(Required=true)]
        public bool? DeletionProtection { get; set; }

        [NameInMap("ingress_loadbalancer_id")]
        [Validation(Required=true)]
        public string IngressLoadbalancerId { get; set; }

        [NameInMap("api_server_eip")]
        [Validation(Required=true)]
        public bool? ApiServerEip { get; set; }

        [NameInMap("api_server_eip_id")]
        [Validation(Required=true)]
        public string ApiServerEipId { get; set; }

        [NameInMap("resource_group_id")]
        [Validation(Required=true)]
        public string ResourceGroupId { get; set; }

    }

}
