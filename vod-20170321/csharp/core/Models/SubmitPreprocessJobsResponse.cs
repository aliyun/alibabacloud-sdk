// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class SubmitPreprocessJobsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PreprocessJobs")]
        [Validation(Required=true)]
        public SubmitPreprocessJobsResponsePreprocessJobs PreprocessJobs { get; set; }
        public class SubmitPreprocessJobsResponsePreprocessJobs : TeaModel {
            [NameInMap("PreprocessJob")]
            [Validation(Required=true)]
            public List<SubmitPreprocessJobsResponsePreprocessJobsPreprocessJob> PreprocessJob { get; set; }
            public class SubmitPreprocessJobsResponsePreprocessJobsPreprocessJob : TeaModel {
                    public string JobId { get; set; }
            }
        };

    }

}
