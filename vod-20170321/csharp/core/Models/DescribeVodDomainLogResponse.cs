// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class DescribeVodDomainLogResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DomainLogDetails")]
        [Validation(Required=true)]
        public DescribeVodDomainLogResponseDomainLogDetails DomainLogDetails { get; set; }
        public class DescribeVodDomainLogResponseDomainLogDetails : TeaModel {
            [NameInMap("DomainLogDetail")]
            [Validation(Required=true)]
            public List<DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetail> DomainLogDetail { get; set; }
            public class DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetail : TeaModel {
                    public string DomainName { get; set; }
                    public long LogCount { get; set; }
                    public DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfos LogInfos { get; set; }
                    public class DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfos : TeaModel {
                        [NameInMap("LogInfoDetail")]
                        [Validation(Required=true)]
                        public List<DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfosLogInfoDetail> LogInfoDetail { get; set; }
                        public class DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfosLogInfoDetail : TeaModel {
                            [NameInMap("LogName")]
                            [Validation(Required=true)]
                            public string LogName { get; set; }

                            [NameInMap("LogPath")]
                            [Validation(Required=true)]
                            public string LogPath { get; set; }

                            [NameInMap("LogSize")]
                            [Validation(Required=true)]
                            public long LogSize { get; set; }

                            [NameInMap("StartTime")]
                            [Validation(Required=true)]
                            public string StartTime { get; set; }

                            [NameInMap("EndTime")]
                            [Validation(Required=true)]
                            public string EndTime { get; set; }

                        }

                    }
                    public DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailPageInfos PageInfos { get; set; }
                    public class DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailPageInfos : TeaModel {
                        [NameInMap("PageNumber")]
                        [Validation(Required=true)]
                        public long PageNumber { get; set; }

                        [NameInMap("PageSize")]
                        [Validation(Required=true)]
                        public long PageSize { get; set; }

                        [NameInMap("Total")]
                        [Validation(Required=true)]
                        public long Total { get; set; }

                    }
            }
        };

    }

}
