// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetFileResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("ErrorCode")]
        [Validation(Required=true)]
        public string ErrorCode { get; set; }

        [NameInMap("ErrorMessage")]
        [Validation(Required=true)]
        public string ErrorMessage { get; set; }

        [NameInMap("HttpStatusCode")]
        [Validation(Required=true)]
        public int? HttpStatusCode { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public GetFileResponseData Data { get; set; }
        public class GetFileResponseData : TeaModel {
            [NameInMap("File")]
            [Validation(Required=true)]
            public GetFileResponseDataFile File { get; set; }
            public class GetFileResponseDataFile : TeaModel {
                [NameInMap("ConnectionName")]
                [Validation(Required=true)]
                public string ConnectionName { get; set; }

                [NameInMap("ParentId")]
                [Validation(Required=true)]
                public long ParentId { get; set; }

                [NameInMap("IsMaxCompute")]
                [Validation(Required=true)]
                public bool? IsMaxCompute { get; set; }

                [NameInMap("CreateTime")]
                [Validation(Required=true)]
                public long CreateTime { get; set; }

                [NameInMap("CreateUser")]
                [Validation(Required=true)]
                public string CreateUser { get; set; }

                [NameInMap("BizId")]
                [Validation(Required=true)]
                public long BizId { get; set; }

                [NameInMap("FileFolderId")]
                [Validation(Required=true)]
                public string FileFolderId { get; set; }

                [NameInMap("FileName")]
                [Validation(Required=true)]
                public string FileName { get; set; }

                [NameInMap("FileType")]
                [Validation(Required=true)]
                public int? FileType { get; set; }

                [NameInMap("UseType")]
                [Validation(Required=true)]
                public int? UseType { get; set; }

                [NameInMap("FileDescription")]
                [Validation(Required=true)]
                public string FileDescription { get; set; }

                [NameInMap("Content")]
                [Validation(Required=true)]
                public string Content { get; set; }

                [NameInMap("NodeId")]
                [Validation(Required=true)]
                public long NodeId { get; set; }

                [NameInMap("CurrentVersion")]
                [Validation(Required=true)]
                public int? CurrentVersion { get; set; }

                [NameInMap("Owner")]
                [Validation(Required=true)]
                public string Owner { get; set; }

                [NameInMap("LastEditUser")]
                [Validation(Required=true)]
                public string LastEditUser { get; set; }

                [NameInMap("LastEditTime")]
                [Validation(Required=true)]
                public long LastEditTime { get; set; }

                [NameInMap("CommitStatus")]
                [Validation(Required=true)]
                public int? CommitStatus { get; set; }

            }
            [NameInMap("NodeConfiguration")]
            [Validation(Required=true)]
            public GetFileResponseDataNodeConfiguration NodeConfiguration { get; set; }
            public class GetFileResponseDataNodeConfiguration : TeaModel {
                [NameInMap("TaskRerunTime")]
                [Validation(Required=true)]
                public int? TaskRerunTime { get; set; }

                [NameInMap("TaskRerunIntervalMillis")]
                [Validation(Required=true)]
                public int? TaskRerunIntervalMillis { get; set; }

                [NameInMap("RerunMode")]
                [Validation(Required=true)]
                public string RerunMode { get; set; }

                [NameInMap("Stop")]
                [Validation(Required=true)]
                public bool? Stop { get; set; }

                [NameInMap("ParaValue")]
                [Validation(Required=true)]
                public string ParaValue { get; set; }

                [NameInMap("StartEffectDate")]
                [Validation(Required=true)]
                public long StartEffectDate { get; set; }

                [NameInMap("EndEffectDate")]
                [Validation(Required=true)]
                public long EndEffectDate { get; set; }

                [NameInMap("CronExpress")]
                [Validation(Required=true)]
                public string CronExpress { get; set; }

                [NameInMap("CycleType")]
                [Validation(Required=true)]
                public string CycleType { get; set; }

                [NameInMap("DependentType")]
                [Validation(Required=true)]
                public string DependentType { get; set; }

                [NameInMap("DependentNodeIdList")]
                [Validation(Required=true)]
                public string DependentNodeIdList { get; set; }

                [NameInMap("InputList")]
                [Validation(Required=true)]
                public List<GetFileResponseDataNodeConfigurationInputList> InputList { get; set; }
                public class GetFileResponseDataNodeConfigurationInputList : TeaModel {
                    [NameInMap("Input")]
                    [Validation(Required=true)]
                    public string Input { get; set; }

                }

                [NameInMap("OutputList")]
                [Validation(Required=true)]
                public List<GetFileResponseDataNodeConfigurationOutputList> OutputList { get; set; }
                public class GetFileResponseDataNodeConfigurationOutputList : TeaModel {
                    [NameInMap("Output")]
                    [Validation(Required=true)]
                    public string Output { get; set; }

                    [NameInMap("RefTableName")]
                    [Validation(Required=true)]
                    public string RefTableName { get; set; }

                }

            }
        };

    }

}
