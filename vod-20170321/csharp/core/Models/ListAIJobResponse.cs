// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class ListAIJobResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("AIJobList")]
        [Validation(Required=true)]
        public ListAIJobResponseAIJobList AIJobList { get; set; }
        public class ListAIJobResponseAIJobList : TeaModel {
            [NameInMap("AIJob")]
            [Validation(Required=true)]
            public List<ListAIJobResponseAIJobListAIJob> AIJob { get; set; }
            public class ListAIJobResponseAIJobListAIJob : TeaModel {
                    public string JobId { get; set; }
                    public string MediaId { get; set; }
                    public string Type { get; set; }
                    public string Status { get; set; }
                    public string Code { get; set; }
                    public string Message { get; set; }
                    public string CreationTime { get; set; }
                    public string CompleteTime { get; set; }
                    public string Data { get; set; }
            }
        };

        [NameInMap("NonExistAIJobIds")]
        [Validation(Required=true)]
        public ListAIJobResponseNonExistAIJobIds NonExistAIJobIds { get; set; }
        public class ListAIJobResponseNonExistAIJobIds : TeaModel {
            [NameInMap("String")]
            [Validation(Required=true)]
            public List<string> String { get; set; }
        };

    }

}
