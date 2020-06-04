// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class DescribePlayUserTotalResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("UserPlayStatisTotals")]
        [Validation(Required=true)]
        public DescribePlayUserTotalResponseUserPlayStatisTotals UserPlayStatisTotals { get; set; }
        public class DescribePlayUserTotalResponseUserPlayStatisTotals : TeaModel {
            [NameInMap("UserPlayStatisTotal")]
            [Validation(Required=true)]
            public List<DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotal> UserPlayStatisTotal { get; set; }
            public class DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotal : TeaModel {
                    public string Date { get; set; }
                    public string PlayDuration { get; set; }
                    public string PlayRange { get; set; }
                    public DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalVV VV { get; set; }
                    public class DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalVV : TeaModel {
                        [NameInMap("Android")]
                        [Validation(Required=true)]
                        public string Android { get; set; }

                        [NameInMap("iOS")]
                        [Validation(Required=true)]
                        public string IOS { get; set; }

                        [NameInMap("Flash")]
                        [Validation(Required=true)]
                        public string Flash { get; set; }

                        [NameInMap("HTML5")]
                        [Validation(Required=true)]
                        public string HTML5 { get; set; }

                    }
                    public DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalUV UV { get; set; }
                    public class DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalUV : TeaModel {
                        [NameInMap("Android")]
                        [Validation(Required=true)]
                        public string Android { get; set; }

                        [NameInMap("iOS")]
                        [Validation(Required=true)]
                        public string IOS { get; set; }

                        [NameInMap("Flash")]
                        [Validation(Required=true)]
                        public string Flash { get; set; }

                        [NameInMap("HTML5")]
                        [Validation(Required=true)]
                        public string HTML5 { get; set; }

                    }
            }
        };

    }

}
