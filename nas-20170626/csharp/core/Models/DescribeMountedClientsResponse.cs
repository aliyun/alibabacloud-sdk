// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class DescribeMountedClientsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("Clients")]
        [Validation(Required=true)]
        public DescribeMountedClientsResponseClients Clients { get; set; }
        public class DescribeMountedClientsResponseClients : TeaModel {
            [NameInMap("Client")]
            [Validation(Required=true)]
            public List<DescribeMountedClientsResponseClientsClient> Client { get; set; }
            public class DescribeMountedClientsResponseClientsClient : TeaModel {
                    public string ClientIP { get; set; }
            }
        };

    }

}
