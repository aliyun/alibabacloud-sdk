// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeDTCSecurityIpHostsForSQLServerResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBInstanceId")]
        [Validation(Required=true)]
        public string DBInstanceId { get; set; }

        [NameInMap("IpHostPairNum")]
        [Validation(Required=true)]
        public string IpHostPairNum { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescribeDTCSecurityIpHostsForSQLServerResponseItems Items { get; set; }
        public class DescribeDTCSecurityIpHostsForSQLServerResponseItems : TeaModel {
            [NameInMap("WhiteListGroups")]
            [Validation(Required=true)]
            public List<DescribeDTCSecurityIpHostsForSQLServerResponseItemsWhiteListGroups> WhiteListGroups { get; set; }
            public class DescribeDTCSecurityIpHostsForSQLServerResponseItemsWhiteListGroups : TeaModel {
                    public string SecurityIpHosts { get; set; }
                    public string WhitelistGroupName { get; set; }
            }
        };

    }

}
