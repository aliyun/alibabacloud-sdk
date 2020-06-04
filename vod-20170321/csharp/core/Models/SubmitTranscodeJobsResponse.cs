// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class SubmitTranscodeJobsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TranscodeTaskId")]
        [Validation(Required=true)]
        public string TranscodeTaskId { get; set; }

        [NameInMap("TranscodeJobs")]
        [Validation(Required=true)]
        public SubmitTranscodeJobsResponseTranscodeJobs TranscodeJobs { get; set; }
        public class SubmitTranscodeJobsResponseTranscodeJobs : TeaModel {
            [NameInMap("TranscodeJob")]
            [Validation(Required=true)]
            public List<SubmitTranscodeJobsResponseTranscodeJobsTranscodeJob> TranscodeJob { get; set; }
            public class SubmitTranscodeJobsResponseTranscodeJobsTranscodeJob : TeaModel {
                    public string JobId { get; set; }
            }
        };

    }

}
