// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class DescribeVodDomainDetailResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DomainDetail")]
        [Validation(Required=true)]
        public DescribeVodDomainDetailResponseDomainDetail DomainDetail { get; set; }
        public class DescribeVodDomainDetailResponseDomainDetail : TeaModel {
            [NameInMap("GmtCreated")]
            [Validation(Required=true)]
            public string GmtCreated { get; set; }
            [NameInMap("GmtModified")]
            [Validation(Required=true)]
            public string GmtModified { get; set; }
            [NameInMap("DomainStatus")]
            [Validation(Required=true)]
            public string DomainStatus { get; set; }
            [NameInMap("Cname")]
            [Validation(Required=true)]
            public string Cname { get; set; }
            [NameInMap("DomainName")]
            [Validation(Required=true)]
            public string DomainName { get; set; }
            [NameInMap("Description")]
            [Validation(Required=true)]
            public string Description { get; set; }
            [NameInMap("SSLProtocol")]
            [Validation(Required=true)]
            public string SSLProtocol { get; set; }
            [NameInMap("SSLPub")]
            [Validation(Required=true)]
            public string SSLPub { get; set; }
            [NameInMap("Scope")]
            [Validation(Required=true)]
            public string Scope { get; set; }
            [NameInMap("CertName")]
            [Validation(Required=true)]
            public string CertName { get; set; }
            [NameInMap("Weight")]
            [Validation(Required=true)]
            public string Weight { get; set; }
            [NameInMap("Sources")]
            [Validation(Required=true)]
            public DescribeVodDomainDetailResponseDomainDetailSources Sources { get; set; }
            public class DescribeVodDomainDetailResponseDomainDetailSources : TeaModel {
                [NameInMap("Source")]
                [Validation(Required=true)]
                public List<DescribeVodDomainDetailResponseDomainDetailSourcesSource> Source { get; set; }
                public class DescribeVodDomainDetailResponseDomainDetailSourcesSource : TeaModel {
                    [NameInMap("Content")]
                    [Validation(Required=true)]
                    public string Content { get; set; }

                    [NameInMap("Type")]
                    [Validation(Required=true)]
                    public string Type { get; set; }

                    [NameInMap("Port")]
                    [Validation(Required=true)]
                    public int? Port { get; set; }

                    [NameInMap("Enabled")]
                    [Validation(Required=true)]
                    public string Enabled { get; set; }

                    [NameInMap("Priority")]
                    [Validation(Required=true)]
                    public string Priority { get; set; }

                }

            }
        };

    }

}
