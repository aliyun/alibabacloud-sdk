// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeBgpNetworksResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("BgpNetworks")]
        [Validation(Required=true)]
        public DescribeBgpNetworksResponseBgpNetworks BgpNetworks { get; set; }
        public class DescribeBgpNetworksResponseBgpNetworks : TeaModel {
            [NameInMap("BgpNetwork")]
            [Validation(Required=true)]
            public List<DescribeBgpNetworksResponseBgpNetworksBgpNetwork> BgpNetwork { get; set; }
            public class DescribeBgpNetworksResponseBgpNetworksBgpNetwork : TeaModel {
                    public string VpcId { get; set; }
                    public string DstCidrBlock { get; set; }
                    public string RouterId { get; set; }
                    public string Status { get; set; }
            }
        };

    }

}
