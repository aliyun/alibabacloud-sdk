// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DeleteRouteEntryRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=false)]
        public string RegionId { get; set; }

        [NameInMap("RouteTableId")]
        [Validation(Required=false)]
        public string RouteTableId { get; set; }

        [NameInMap("RouteEntryId")]
        [Validation(Required=false)]
        public string RouteEntryId { get; set; }

        [NameInMap("DestinationCidrBlock")]
        [Validation(Required=false)]
        public string DestinationCidrBlock { get; set; }

        [NameInMap("NextHopId")]
        [Validation(Required=false)]
        public string NextHopId { get; set; }

        [NameInMap("NextHopList")]
        [Validation(Required=false)]
        public List<DeleteRouteEntryRequestNextHopList> NextHopList { get; set; }
        public class DeleteRouteEntryRequestNextHopList : TeaModel {
            [NameInMap("NextHopType")]
            [Validation(Required=true)]
            public string NextHopType { get; set; }

            [NameInMap("NextHopId")]
            [Validation(Required=true)]
            public string NextHopId { get; set; }

        }

    }

}
