// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeGtmMonitorAvailableConfigResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("IspCityNodes")]
        [Validation(Required=true)]
        public DescribeGtmMonitorAvailableConfigResponseIspCityNodes IspCityNodes { get; set; }
        public class DescribeGtmMonitorAvailableConfigResponseIspCityNodes : TeaModel {
            [NameInMap("IspCityNode")]
            [Validation(Required=true)]
            public List<DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode> IspCityNode { get; set; }
            public class DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode : TeaModel {
                    public string IspName { get; set; }
                    public string IspCode { get; set; }
                    public string CityName { get; set; }
                    public string CityCode { get; set; }
                    public bool? DefaultSelected { get; set; }
                    public bool? Mainland { get; set; }
                    public string GroupType { get; set; }
                    public string GroupName { get; set; }
            }
        };

    }

}
