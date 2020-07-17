// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class ModifyDBEndpointAddressRequest : TeaModel {
        [NameInMap("DBClusterId")]
        [Validation(Required=true)]
        public string DBClusterId { get; set; }

        [NameInMap("DBEndpointId")]
        [Validation(Required=true)]
        public string DBEndpointId { get; set; }

        [NameInMap("NetType")]
        [Validation(Required=true)]
        public string NetType { get; set; }

        [NameInMap("ConnectionStringPrefix")]
        [Validation(Required=false)]
        public string ConnectionStringPrefix { get; set; }

        [NameInMap("PrivateZoneAddressPrefix")]
        [Validation(Required=false)]
        public string PrivateZoneAddressPrefix { get; set; }

        [NameInMap("PrivateZoneName")]
        [Validation(Required=false)]
        public string PrivateZoneName { get; set; }

        [NameInMap("Port")]
        [Validation(Required=false)]
        public string Port { get; set; }

    }

}
