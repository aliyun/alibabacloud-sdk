// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class GetAIVideoTagResultResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("VideoTagResult")]
        [Validation(Required=true)]
        public GetAIVideoTagResultResponseVideoTagResult VideoTagResult { get; set; }
        public class GetAIVideoTagResultResponseVideoTagResult : TeaModel {
            [NameInMap("Category")]
            [Validation(Required=true)]
            public List<GetAIVideoTagResultResponseVideoTagResultCategory> Category { get; set; }
            public class GetAIVideoTagResultResponseVideoTagResultCategory : TeaModel {
                    public string Tag { get; set; }
            }
            [NameInMap("Person")]
            [Validation(Required=true)]
            public List<GetAIVideoTagResultResponseVideoTagResultPerson> Person { get; set; }
            public class GetAIVideoTagResultResponseVideoTagResultPerson : TeaModel {
                    public string FaceUrl { get; set; }
                    public string Tag { get; set; }
                    public List<string> Times { get; set; }
            }
            [NameInMap("Time")]
            [Validation(Required=true)]
            public List<GetAIVideoTagResultResponseVideoTagResultTime> Time { get; set; }
            public class GetAIVideoTagResultResponseVideoTagResultTime : TeaModel {
                    public string Tag { get; set; }
                    public List<string> Times { get; set; }
            }
            [NameInMap("Location")]
            [Validation(Required=true)]
            public List<GetAIVideoTagResultResponseVideoTagResultLocation> Location { get; set; }
            public class GetAIVideoTagResultResponseVideoTagResultLocation : TeaModel {
                    public string Tag { get; set; }
                    public List<string> Times { get; set; }
            }
            [NameInMap("Keyword")]
            [Validation(Required=true)]
            public List<GetAIVideoTagResultResponseVideoTagResultKeyword> Keyword { get; set; }
            public class GetAIVideoTagResultResponseVideoTagResultKeyword : TeaModel {
                    public string Tag { get; set; }
                    public List<string> Times { get; set; }
            }
        };

    }

}
