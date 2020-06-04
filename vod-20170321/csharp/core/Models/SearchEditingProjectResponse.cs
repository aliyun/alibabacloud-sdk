// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class SearchEditingProjectResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Total")]
        [Validation(Required=true)]
        public int? Total { get; set; }

        [NameInMap("ProjectList")]
        [Validation(Required=true)]
        public SearchEditingProjectResponseProjectList ProjectList { get; set; }
        public class SearchEditingProjectResponseProjectList : TeaModel {
            [NameInMap("Project")]
            [Validation(Required=true)]
            public List<SearchEditingProjectResponseProjectListProject> Project { get; set; }
            public class SearchEditingProjectResponseProjectListProject : TeaModel {
                    public string ProjectId { get; set; }
                    public string CreationTime { get; set; }
                    public string ModifiedTime { get; set; }
                    public string Status { get; set; }
                    public string Description { get; set; }
                    public string Title { get; set; }
                    public string CoverURL { get; set; }
                    public string StorageLocation { get; set; }
                    public string RegionId { get; set; }
                    public float? Duration { get; set; }
            }
        };

    }

}
