// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class DescribeLogAnalysisResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("Analyses")]
        [Validation(Required=true)]
        public DescribeLogAnalysisResponseAnalyses Analyses { get; set; }
        public class DescribeLogAnalysisResponseAnalyses : TeaModel {
            [NameInMap("Analysis")]
            [Validation(Required=true)]
            public List<DescribeLogAnalysisResponseAnalysesAnalysis> Analysis { get; set; }
            public class DescribeLogAnalysisResponseAnalysesAnalysis : TeaModel {
                    public string MetaKey { get; set; }
                    public DescribeLogAnalysisResponseAnalysesAnalysisMetaValue MetaValue { get; set; }
                    public class DescribeLogAnalysisResponseAnalysesAnalysisMetaValue : TeaModel {
                        [NameInMap("Logstore")]
                        [Validation(Required=true)]
                        public string Logstore { get; set; }

                        [NameInMap("Region")]
                        [Validation(Required=true)]
                        public string Region { get; set; }

                        [NameInMap("Project")]
                        [Validation(Required=true)]
                        public string Project { get; set; }

                        [NameInMap("RoleArn")]
                        [Validation(Required=true)]
                        public string RoleArn { get; set; }

                    }
            }
        };

    }

}
