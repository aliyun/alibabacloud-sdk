// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeGtmInstancesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("TotalItems")]
        [Validation(Required=true)]
        public int? TotalItems { get; set; }

        [NameInMap("TotalPages")]
        [Validation(Required=true)]
        public int? TotalPages { get; set; }

        [NameInMap("GtmInstances")]
        [Validation(Required=true)]
        public DescribeGtmInstancesResponseGtmInstances GtmInstances { get; set; }
        public class DescribeGtmInstancesResponseGtmInstances : TeaModel {
            [NameInMap("GtmInstance")]
            [Validation(Required=true)]
            public List<DescribeGtmInstancesResponseGtmInstancesGtmInstance> GtmInstance { get; set; }
            public class DescribeGtmInstancesResponseGtmInstancesGtmInstance : TeaModel {
                    public string InstanceId { get; set; }
                    public string InstanceName { get; set; }
                    public string Cname { get; set; }
                    public string UserDomainName { get; set; }
                    public string VersionCode { get; set; }
                    public int? Ttl { get; set; }
                    public string LbaStrategy { get; set; }
                    public string CreateTime { get; set; }
                    public long CreateTimestamp { get; set; }
                    public string ExpireTime { get; set; }
                    public long ExpireTimestamp { get; set; }
                    public string AlertGroup { get; set; }
                    public string CnameMode { get; set; }
                    public int? AccessStrategyNum { get; set; }
                    public int? AddressPoolNum { get; set; }
            }
        };

    }

}
