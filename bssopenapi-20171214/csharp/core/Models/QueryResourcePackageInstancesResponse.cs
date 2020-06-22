// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryResourcePackageInstancesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Page")]
        [Validation(Required=true)]
        public int? Page { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("Total")]
        [Validation(Required=true)]
        public int? Total { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public QueryResourcePackageInstancesResponseData Data { get; set; }
        public class QueryResourcePackageInstancesResponseData : TeaModel {
            [NameInMap("HostId")]
            [Validation(Required=true)]
            public string HostId { get; set; }
            [NameInMap("PageNum")]
            [Validation(Required=true)]
            public string PageNum { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public string PageSize { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public string TotalCount { get; set; }
            [NameInMap("Instances")]
            [Validation(Required=true)]
            public QueryResourcePackageInstancesResponseDataInstances Instances { get; set; }
            public class QueryResourcePackageInstancesResponseDataInstances : TeaModel {
                [NameInMap("Instance")]
                [Validation(Required=true)]
                public List<QueryResourcePackageInstancesResponseDataInstancesInstance> Instance { get; set; }
                public class QueryResourcePackageInstancesResponseDataInstancesInstance : TeaModel {
                    [NameInMap("InstanceId")]
                    [Validation(Required=true)]
                    public string InstanceId { get; set; }

                    [NameInMap("Region")]
                    [Validation(Required=true)]
                    public string Region { get; set; }

                    [NameInMap("TotalAmount")]
                    [Validation(Required=true)]
                    public string TotalAmount { get; set; }

                    [NameInMap("TotalAmountUnit")]
                    [Validation(Required=true)]
                    public string TotalAmountUnit { get; set; }

                    [NameInMap("RemainingAmount")]
                    [Validation(Required=true)]
                    public string RemainingAmount { get; set; }

                    [NameInMap("RemainingAmountUnit")]
                    [Validation(Required=true)]
                    public string RemainingAmountUnit { get; set; }

                    [NameInMap("EffectiveTime")]
                    [Validation(Required=true)]
                    public string EffectiveTime { get; set; }

                    [NameInMap("ExpiryTime")]
                    [Validation(Required=true)]
                    public string ExpiryTime { get; set; }

                    [NameInMap("Remark")]
                    [Validation(Required=true)]
                    public string Remark { get; set; }

                    [NameInMap("PackageType")]
                    [Validation(Required=true)]
                    public string PackageType { get; set; }

                    [NameInMap("Status")]
                    [Validation(Required=true)]
                    public string Status { get; set; }

                    [NameInMap("DeductType")]
                    [Validation(Required=true)]
                    public string DeductType { get; set; }

                    [NameInMap("ApplicableProducts")]
                    [Validation(Required=true)]
                    public QueryResourcePackageInstancesResponseDataInstancesInstanceApplicableProducts ApplicableProducts { get; set; }
                    public class QueryResourcePackageInstancesResponseDataInstancesInstanceApplicableProducts : TeaModel {
                        [NameInMap("Product")]
                        [Validation(Required=true)]
                        public List<string> Product { get; set; }
                    };

                }

            }
        };

    }

}
