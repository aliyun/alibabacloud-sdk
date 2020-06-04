// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class DescribeVodUserDomainsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public long PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public long PageSize { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public long TotalCount { get; set; }

        [NameInMap("Domains")]
        [Validation(Required=true)]
        public DescribeVodUserDomainsResponseDomains Domains { get; set; }
        public class DescribeVodUserDomainsResponseDomains : TeaModel {
            [NameInMap("PageData")]
            [Validation(Required=true)]
            public List<DescribeVodUserDomainsResponseDomainsPageData> PageData { get; set; }
            public class DescribeVodUserDomainsResponseDomainsPageData : TeaModel {
                    public string DomainName { get; set; }
                    public string Cname { get; set; }
                    public string CdnType { get; set; }
                    public string DomainStatus { get; set; }
                    public string GmtCreated { get; set; }
                    public string GmtModified { get; set; }
                    public string Description { get; set; }
                    public string SslProtocol { get; set; }
                    public string Weight { get; set; }
                    public string Sandbox { get; set; }
                    public DescribeVodUserDomainsResponseDomainsPageDataSources Sources { get; set; }
                    public class DescribeVodUserDomainsResponseDomainsPageDataSources : TeaModel {
                        [NameInMap("Source")]
                        [Validation(Required=true)]
                        public List<DescribeVodUserDomainsResponseDomainsPageDataSourcesSource> Source { get; set; }
                        public class DescribeVodUserDomainsResponseDomainsPageDataSourcesSource : TeaModel {
                            [NameInMap("Type")]
                            [Validation(Required=true)]
                            public string Type { get; set; }

                            [NameInMap("Content")]
                            [Validation(Required=true)]
                            public string Content { get; set; }

                            [NameInMap("Port")]
                            [Validation(Required=true)]
                            public int? Port { get; set; }

                            [NameInMap("Priority")]
                            [Validation(Required=true)]
                            public string Priority { get; set; }

                        }

                    }
            }
        };

    }

}
