// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeExporterOutputListResponse : TeaModel {
        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Total")]
        [Validation(Required=true)]
        public int? Total { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Datapoints")]
        [Validation(Required=true)]
        public DescribeExporterOutputListResponseDatapoints Datapoints { get; set; }
        public class DescribeExporterOutputListResponseDatapoints : TeaModel {
            [NameInMap("Datapoint")]
            [Validation(Required=true)]
            public List<DescribeExporterOutputListResponseDatapointsDatapoint> Datapoint { get; set; }
            public class DescribeExporterOutputListResponseDatapointsDatapoint : TeaModel {
                    public string DestName { get; set; }
                    public string DestType { get; set; }
                    public long CreateTime { get; set; }
                    public DescribeExporterOutputListResponseDatapointsDatapointConfigJson ConfigJson { get; set; }
                    public class DescribeExporterOutputListResponseDatapointsDatapointConfigJson : TeaModel {
                        [NameInMap("logstore")]
                        [Validation(Required=true)]
                        public string Logstore { get; set; }

                        [NameInMap("project")]
                        [Validation(Required=true)]
                        public string Project { get; set; }

                        [NameInMap("endpoint")]
                        [Validation(Required=true)]
                        public string Endpoint { get; set; }

                        [NameInMap("as")]
                        [Validation(Required=true)]
                        public string As { get; set; }

                        [NameInMap("ak")]
                        [Validation(Required=true)]
                        public string Ak { get; set; }

                    }
            }
        };

    }

}
