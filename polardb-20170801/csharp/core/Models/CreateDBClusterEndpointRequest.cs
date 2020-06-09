// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class CreateDBClusterEndpointRequest : TeaModel {
        [NameInMap("AccessKeyId")]
        [Validation(Required=false)]
        public string AccessKeyId { get; set; }

        [NameInMap("OwnerId")]
        [Validation(Required=false)]
        public long OwnerId { get; set; }

        [NameInMap("ResourceOwnerAccount")]
        [Validation(Required=false)]
        public string ResourceOwnerAccount { get; set; }

        [NameInMap("ResourceOwnerId")]
        [Validation(Required=false)]
        public long ResourceOwnerId { get; set; }

        [NameInMap("OwnerAccount")]
        [Validation(Required=false)]
        public string OwnerAccount { get; set; }

        [NameInMap("DBClusterId")]
        [Validation(Required=true)]
        public string DBClusterId { get; set; }

        [NameInMap("EndpointType")]
        [Validation(Required=true)]
        public string EndpointType { get; set; }

        [NameInMap("Nodes")]
        [Validation(Required=false)]
        public string Nodes { get; set; }

        [NameInMap("ReadWriteMode")]
        [Validation(Required=false)]
        public string ReadWriteMode { get; set; }

        [NameInMap("AutoAddNewNodes")]
        [Validation(Required=false)]
        public string AutoAddNewNodes { get; set; }

        [NameInMap("EndpointConfig")]
        [Validation(Required=false)]
        public string EndpointConfig { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

    }

}
