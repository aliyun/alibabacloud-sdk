// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class CreateVpnPbrRouteEntryResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("VpnInstanceId")]
        [Validation(Required=true)]
        public string VpnInstanceId { get; set; }

        [NameInMap("RouteSource")]
        [Validation(Required=true)]
        public string RouteSource { get; set; }

        [NameInMap("RouteDest")]
        [Validation(Required=true)]
        public string RouteDest { get; set; }

        [NameInMap("NextHop")]
        [Validation(Required=true)]
        public string NextHop { get; set; }

        [NameInMap("Weight")]
        [Validation(Required=true)]
        public int? Weight { get; set; }

        [NameInMap("OverlayMode")]
        [Validation(Required=true)]
        public string OverlayMode { get; set; }

        [NameInMap("Description")]
        [Validation(Required=true)]
        public string Description { get; set; }

        [NameInMap("State")]
        [Validation(Required=true)]
        public string State { get; set; }

        [NameInMap("CreateTime")]
        [Validation(Required=true)]
        public long CreateTime { get; set; }

    }

}
